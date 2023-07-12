

function Validator(options) {

    function getParen(element, selector) {
        while(element.parentElement) {
            if(element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {};

    // Validate
    function validate(inputElement, rule) {
        var errorElement = getParen(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
        var errorMessage;
       
        // lấy ra các rules của select
        var rules = selectorRules[rule.selector];          

        // lặp qua từng rule và kiểm tra
        for(var i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }
            // nếu có lỗi dừng việc kiểm tra
            if(errorMessage) break;
        }

        if(errorMessage) {
            errorElement.innerText = errorMessage;
            getParen(inputElement, options.formGroupSelector).classList.add('invalid');
        }else {
            errorElement.innerText = '';
            getParen(inputElement, options.formGroupSelector).classList.remove('invalid');
        }

        return !errorMessage;
    }

    //Lấy element của form
    var formElement = document.querySelector(options.form)
    if(formElement){

        // khi submit form
        formElement.onsubmit = function (e) {
            e.preventDefault();

            var isFormValid = true;

            // lặp qua từng rule và validate
            options.rules.forEach(function(rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                if(!isValid) {
                    isFormValid = false;
                }
            });


            if(isFormValid) {
                // Trường hợp submit vs js
                if (typeof  options.onSubmit === 'function') {
                    var enableInputs = formElement.querySelectorAll('[name]:not([disabled])');
                    var formValues = Array.from(enableInputs).reduce(function(values, input) {
                       
                        switch(input.type){
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                break;
                            case 'checkbox':
                                if(!input.matches(':checked')) {
                                    values[input.name] = '';
                                     return values;
                                }
                                if(!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                values[input.name].push(input.value);
                                break;
                            case 'file':
                                values[input.name] = input.files;
                                break;    
                            default:
                                values[input.name] = input.value;
                        }

                        return values;
                        
                    }, {});
                    options.onSubmit(formValues);
                }
                // Trường hợp submit vs hành vi mặc định
                else {
                    formElement.submit();
                }
            } 
        }

        // lặp qua mỗi rule và xử lý (lắng nghe even blur, input,...)
        options.rules.forEach(function(rule) {

            // Lưu lại các rule cho mỗi input
            if(Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector);
            
            Array.from(inputElements).forEach(function(inputElement) {
                // xử lý blur khỏ input
                inputElement.onblur = function() {
                    validate(inputElement, rule);
                }

                // xử lý mỗi khi người dùng nhập vào input
                inputElement.oninput = function() {
                    var errorElement = getParen(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
                    errorElement.innerText = '';
                    getParen(inputElement, options.formGroupSelector).classList.remove('invalid');
                }
            });
        });
    }
}

// Định nghĩa rules
Validator.isRequired = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            return value ? undefined : message || 'Vui lòng nhập thông tin';
        }
    };
}

Validator.isEmail = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'Trường này phải là email';
        }
    };
}

Validator.minLength = function(selector, min, message) {
    return {
        selector: selector,
        test: function(value) {  
            return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        }
    };
}

Validator.isConfirmed = function(selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function(value) {  
           return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không đồng nhất';
        }
    };
}