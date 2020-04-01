var app = new Vue({
    el: "#page",
    data: {
        cart: [],
    },
    mounted() {
        this.init();
    },
    updated() {

    },
    computed: {
        get_total: function() {
            let total_amount = 0;
            this.cart.forEach(item => {
                let item_amount = item.product.price * item.quantity;
                total_amount += item_amount;
            });
            return total_amount;
        }
    },
    methods: {
        init() {
            axios.get('get_cart').then(response => {
                this.cart = response.data.data;
            })
        },
        increase(index) {
            this.cart[index].quantity++;
        },
        decrease(index) {
            if (this.cart[index].quantity === 1) return false;
            this.cart[index].quantity--;
        },
        removeProduct(index) {
            this.cart.splice(index, 1);
            $("#cart_count").text(this.cart.length);
        },
        sub_total(item) {
            return item.product.price * item.quantity;
        },
        saveCart() {
            const params = { cart: this.cart };
            axios.post('/save_cart', params)
                .then(response => {
                    if (response.data.status == 200) {
                        window.location.href = '/input_customer';
                    }
                })
        }


    }
});
