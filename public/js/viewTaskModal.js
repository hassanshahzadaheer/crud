$(document).ready(function () {

    // add new task

    $(".create-task").click(function() {
        console.log("add button has been pressed");

        $.ajax({
            url: `/tasks/create`,
            method: "GET",
            success: function(renderAddForm) {
                $("#addModalContent").html(renderAddForm);
            },
            error: function(xhr,status,error) {
                console.log(error);
            }
        });

        $("#addTaskModal").show();
    });



    // view task detail
    $(".view-btn").click(function () {
        var taskId = $(this).data("taskid");
        var taskName = $(this).data("task-name");
        var content = `Task # ${taskId} <br> Task: ${taskName}`;
        $("#taskModalContent").html(content);
        $("#viewTaskModal").modal("show");
    });


    // open edit modal and update task detail

    $(".edit-btn").click(function() {

          var taskId = $(this).data("taskid");
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

    // delete record
    $(".delete-btn").click(function(){
        var taskId = $(this).data("taskid");
        var taskName = $(this).closest("tr").find("td:nth-child(2)").text();
        var confirmation = confirm("Are you sure you want to delete the task: " + taskName + " ?");

        if(confirmation) {
            $.ajax({
                url: `/tasks/${taskId}`,
                type: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success:function(response) {
                    console.log(response.message);
                      location.reload();
                },
                error: function(status,error) {
                    console.log(error);
                }
            });
        }

    });
});
