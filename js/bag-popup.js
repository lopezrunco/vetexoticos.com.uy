document.addEventListener('DOMContentLoaded', function() {
    const addButton = document.querySelector('.add-bag-button')

    if (addButton) {
        addButton.addEventListener('click', function(event) {
            event.preventDefault()

            const productId = this.dataset.productId

            if (!productId) {
                console.error('Bag product id not found.')
                return
            }

            // Prepare data for the AJAX request.
            const data = new URLSearchParams()
            data.append('action', 'add_bag_to_cart')
            data.append('product_id', productId)

            fetch(wc_ajax_params.ajax_url, {
                method: 'POST',
                body: data
            })
            .then(response => response.json())
            .then(response => {
                if (response && response.success) {
                    console.log('Bag added.')
                    location.reload() // Reload page to update the cart list.
                } else {
                    console.error('Error adding bag to the cart', response)
                }
            })
            .catch(error => {
                console.error('AJAX request failed: ', error)
            })
        })
    }
})