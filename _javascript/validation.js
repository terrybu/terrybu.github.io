$(document).ready(function() {
    $('#contactForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            sender: {
                trigger: 'keyup',
                validators: {
                    notEmpty: {
                        message: 'Your name is required'
                    },
                    stringLength: {
                    	min: 2,
                    	message: 'The full name must be greater than 1 character'
                    },
                    regexp: {
                    	regexp: /^[a-z\s]+$/i,
                    	message: 'Name can only consist of alphabets and spaces'
                    }
                }
            },
            email: {
                trigger: 'keyup',
                validators: {
                    notEmpty: {
                        message: 'Your email is required'
                    },
                    emailAddress: {
                    	message: 'Not a valid email address'
                    }
                }
            },
            mesbody: {
            	trigger: 'keyup',
                validators: {
                    notEmpty: {
                        message: 'The message body is required'
                    },
                    stringLength: {
                    	min: 10,
                    	message: 'The message must be greater than or equal to 10 characters'
                    },
                }
            }
        }
    });
});