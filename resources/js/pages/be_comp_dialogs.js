/*!
 * dashmix - v5.1.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2021
 */
Dashmix.onLoad(class {
    static sweetAlert2() {
        let e = Swal.mixin({
            buttonsStyling: !1,
            target: "#page-container",
            customClass: {
                confirmButton: "btn btn-success m-1",
                cancelButton: "btn btn-danger m-1",
                input: "form-control"
            }
        });
        document.querySelector(".js-swal-simple").addEventListener("click", (t => {
            e.fire("Hi, this is just a simple message!")
        })), document.querySelector(".js-swal-success").addEventListener("click", (t => {
            e.fire("Success", "Everything was updated perfectly!", "success")
        })), document.querySelector(".js-swal-info").addEventListener("click", (t => {
            e.fire("Info", "Just an informational message!", "info")
        })), document.querySelector(".js-swal-warning").addEventListener("click", (t => {
            e.fire("Warning", "Something needs your attention!", "warning")
        })), document.querySelector(".js-swal-error").addEventListener("click", (t => {
            e.fire("Oops...", "Something went wrong!", "error")
        })), document.querySelector(".js-swal-question").addEventListener("click", (t => {
            e.fire("Question", "Are you sure about that?", "question")
        })), document.querySelector(".js-swal-confirm").addEventListener("click", (t => {
            e.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                icon: "warning",
                showCancelButton: !0,
                customClass: {
                    confirmButton: "btn btn-danger m-1",
                    cancelButton: "btn btn-secondary m-1"
                },
                confirmButtonText: "Yes, delete it!",
                html: !1,
                preConfirm: e => new Promise((e => {
                    setTimeout((() => {
                        e()
                    }), 50)
                }))
            }).then((t => {
                t.value ? e.fire("Deleted!", "Your imaginary file has been deleted.", "success") : "cancel" === t.dismiss && e.fire("Cancelled", "Your imaginary file is safe :)", "error")
            }))
        })), document.querySelector(".js-swal-custom-position").addEventListener("click", (t => {
            e.fire({
                position: "top-end",
                title: "Perfect!",
                text: "Nice Position!",
                icon: "success"
            })
        }))
    }
    static init() {
        this.sweetAlert2()
    }
}.init());
