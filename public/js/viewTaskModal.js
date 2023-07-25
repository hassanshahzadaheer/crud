$(document).ready(function () {
    // view task detail
    $(".view-btn").click(function () {
        var taskId = $(this).data("taskid");
        var taskName = $(this).data("task-name");
             var content = `Task # ${taskId} <br> Task: ${taskName}`;
        $("#taskModalContent").html(content);
        $("#viewTaskModal").modal("show");
    });

    // edit task detail

    $(".edit-btn").click(function() {

          var taskId = $(this).data("taskid");
          console.log(taskId);
        var taskName = $(this).data("task-name");
            $.ajax({
                method:'GET',
                url: `/tasks/${taskId}/edit`,
                success: function (data) {
                    $("#editModalContent").html(data)

                },
                error:function(status,error) {
                    console.log(error);
                }
            });


        $("#editTaskModal").modal("show");
    });
});
