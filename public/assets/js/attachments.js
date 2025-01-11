(function () {
    // Set the upload URL for your server endpoint
    var HOST = "https://pro-servik-sehat.test/admin/artikel/upload";

    // Listen for Trix attachment add event
    addEventListener("trix-attachment-add", function (event) {
        if (event.attachment.file) {
            uploadFileAttachment(event.attachment);
        }
    });

    // Upload the file attachment
    function uploadFileAttachment(attachment) {
        uploadFile(attachment.file, setProgress, setAttributes);

        // Update progress for the attachment
        function setProgress(progress) {
            attachment.setUploadProgress(progress);
        }

        // Set attributes for the uploaded attachment
        function setAttributes(attributes) {
            attachment.setAttributes(attributes);
        }
    }

    // Handle the file upload via XMLHttpRequest
    function uploadFile(file, progressCallback, successCallback) {
        var formData = createFormData(file);
        var xhr = new XMLHttpRequest();

        xhr.open("POST", HOST, true);
        xhr.setRequestHeader("X-CSRF-TOKEN", getMeta("csrf-token"));

        // Track upload progress
        xhr.upload.addEventListener("progress", function (event) {
            if (event.lengthComputable) {
                var progress = (event.loaded / event.total) * 100;
                progressCallback(progress);
            }
        });

        // Handle successful upload
        xhr.addEventListener("load", function () {
            if (xhr.status === 200) {
                try {
                    var response = JSON.parse(xhr.responseText);
                    var attributes = {
                        url: response.url,
                        href: response.url + "?content-disposition=attachment",
                    };
                    successCallback(attributes);
                } catch (error) {
                    console.error("Invalid JSON response:", error);
                }
            } else {
                console.error("File upload failed with status:", xhr.status);
            }
        });

        // Handle errors
        xhr.addEventListener("error", function () {
            console.error("File upload error.");
        });

        // Send the request with the file
        xhr.send(formData);
    }

    // Create FormData object for the file upload
    function createFormData(file) {
        var data = new FormData();
        data.append("Content-Type", file.type);
        data.append("file", file);
        return data;
    }

    // Retrieve the CSRF token from meta tags
    function getMeta(metaName) {
        const metas = document.getElementsByTagName("meta");

        for (let i = 0; i < metas.length; i++) {
            if (metas[i].getAttribute("name") === metaName) {
                return metas[i].getAttribute("content");
            }
        }

        return "";
    }
})();
