$(document).ready(function () {
    document
        .getElementById("pro-image")
        .addEventListener("change", readImage, false);

    $(".preview-images-zone").sortable();

    $(document).on("click", ".image-cancel", function () {
        let no = $(this).data("no");
        $(".preview-image.preview-show-" + no).remove();
    });

    $(document).on("click", ".tools-edit-image", function () {
        let no = $(this).data("no");
        $(".preview-image.preview-show-" + no).change(function () {});
    });
});

var num = 3;

function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match("image")) continue;

            var picReader = new FileReader();

            picReader.addEventListener("load", function (event) {
                var picFile = event.target;
                var html =
                    '<div class="preview-image preview-show-' +
                    num +
                    '">' +
                    '<div class="image-cancel" data-no="' +
                    num +
                    '">x</div>' +
                    '<div class="image-zone"><img id="pro-img-' +
                    num +
                    '" src="' +
                    picFile.result +
                    '"></div>' +
                    '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' +
                    num +
                    '" class="btn btn-light btn-edit-image">edit</a></div>' +
                    "</div>";

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val("");
    } else {
        console.log("Browser not support");
    }
}

$(function () {
    $("#province").on("change", function () {
        // Kode untuk ajax request disini
    });
});

// Select2
$(document).ready(function () {
    $("#").select2();
});
