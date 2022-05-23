export default {
    methods: {
        showSuccessResponse(title, message) {
            this.$swal.fire({
                icon: "success",
                title: title,
                text: message
            })
        },

        showErrorResponse(title, message) {
            this.$swal.fire({
                icon: "error",
                title: title,
                text: message
            })
        },

        showWarningResponse(title, message) {
            this.$swal.fire({
                icon: "warning",
                title: title,
                text: message
            })
        },

        showconfirmationResponse(title, message) {
            this.$swal.fire({
                title: title,
                showCancelButton: true,
                confirmButtonText: 'Yes',
            }).then((result) => {

                if (result.isConfirmed) {
                    this.$swal.fire(message, '', 'success')

                }

            })
            return true;
        }
        
    }
}
