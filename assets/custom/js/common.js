jQuery(document).ready(function() {
    //jquery validation engine initiate
    if ($("form.validation").length > 0) {
        $("form.validation").validationEngine({
            showOneMessage: true,
            validationEventTrigger: 'submit',
            promptPosition: "topLeft"
        });
    }
    //jquery validation engine initiate
    if ($("form.validate-one-on-blur").length > 0) {
        $("form.validate-one-on-blur").validationEngine({
            promptPosition: "topLeft",
            showOneMessage: true
        });
    }
    //jquery validation engine initiate
    if ($("form.validate-one-submit").length > 0) {
        $("form.validate-one-submit").validationEngine({
            validationEventTrigger: 'submit',
            promptPosition: "topLeft",
            showOneMessage: true
        });
    }
    //jquery validation engine initiate
    if ($("#thisForm").length > 0) {
        $("#thisForm").validationEngine({
            showOneMessage: true,
            promptPosition: "topLeft"
        });
    }
    if ($("#thisForm1").length > 0) {
        $("#thisForm1").validationEngine('attach');
        $("#thisForm1").validationEngine({
            showOneMessage: true,
            promtPosition: "topLeft"
        });
    }
});