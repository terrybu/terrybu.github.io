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
                        message: 'The title is required'
                    }
                }
            },
            email: {
                trigger: 'blur',
                validators: {
                    notEmpty: {
                        message: 'The summary is required'
                    }
                }
            },
            mesbody: {
                validators: {
                    notEmpty: {
                        message: 'The description is required'
                    }
                }
            }
        }
    });
});