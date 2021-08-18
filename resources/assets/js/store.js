let cart = window.localStorage.getItem('cart');
let cartCount = window.localStorage.getItem('cartCount');
let totalPrice = window.localStorage.getItem('totalPrice');

let store = {
    state:{
        cart: cart ? JSON.parse(cart) : [],
        cartCount: cartCount ? JSON.parse(cartCount) : 0,
        totalPrice: totalPrice ? JSON.parse(totalPrice) : 0,
    },
    mutations: {
        addToCart(state, item){

            let need = false;

            let option = item.options.find(option => option.option.need === '1');

            if(option){
                for(let i = 0;i < item.options.length;i++){
                    if(item.options[i].option.need === '1'){
                        if(item.options[i].select === undefined || item.options[i].select === null){
                            need = true;
                        }
                    }
                }
            }

            if(need === false){
                let add = true;
                let selected_item = [];
                item.options.forEach((opt) => {
                    if(opt.select !== null){
                        selected_item.push(opt.select);
                    }
                });
                state.cart.forEach((prod) => {
                    if(prod.id === item.id){
                        let selected_cart = [];
                        prod.options.forEach((opt) => {
                            if(opt.select !== null){
                                selected_cart.push(opt.select);
                            }
                        });
                        let c = selected_item.filter(n => selected_cart.indexOf(n) === -1);
                        if(c.length === 0){
                            add = false;
                            prod.quantity++;
                            prod.totalPrice += prod.price;
                        }
                    }
                });

                if(add){
                    let date = new Date();
                    let now = date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate();
                    let price = 0;
                    for(let i = 0;i < item.options.length;i++){
                        if(item.options[i].select !== undefined && item.options[i].select !== null){
                            let value = item.options[i].product_values.find(value => value.value_option_id === parseInt(item.options[i].select));
                            if(value){
                                price += parseInt(value.price_option);
                            }
                        }
                    }

                    if(item.status_stock){
                        price += parseInt(item.price_stock);
                    }else{
                        price += parseInt(item.price);
                    }

                    Vue.set(item, 'currentPrice', price);
                    Vue.set(item, 'quantity', 1);
                    Vue.set(item, 'totalPrice', price);

                    state.totalPrice += price;
                    this.commit('saveTotalPrice', state.totalPrice);
                    state.cart.push(item);

                    console.log(state.totalPrice, 1);

                } else {
                    state.totalPrice += item.price;
                    this.commit('saveTotalPrice', state.totalPrice);

                    console.log(state.totalPrice, 2);
                }



                state.cartCount++;
                this.commit('saveCart');
            }else{
                window.location.href = '/product/' + item.slug;
            }

        },
        removeFromCart(state, id){

            let index = state.cart.findIndex(i => i.id === id);

            if(index !== -1){
                state.cartCount -= 1;
                state.totalPrice -= state.cart[index].price;

                if (state.cart[index].quantity > 1) {
                    state.cart[index].quantity--;
                    state.cart[index].totalPrice -= state.cart[index].price
                } else {
                    state.cart.splice(index, 1);
                }

                // Обнуление если в карте осталось 0
                if (state.cart.length == 0) {
                    state.cartCount = 0;
                    state.totalPrice = 0;
                }

                this.commit('saveCart');
            }


        },
        saveCart(state) {
            window.localStorage.setItem('cart', JSON.stringify(state.cart));
            window.localStorage.setItem('cartCount', state.cartCount);
            window.localStorage.setItem('totalPrice', state.totalPrice);
        },
        updateCart(state, products){

            state.cart = products;

            state.cartCount = 0;

            state.cart.forEach(item => {
                state.cartCount += parseInt(item.quantity);
            });

            this.commit('saveCart');


        },
        saveTotalPrice(state, price){

            window.localStorage.setItem('totalPrice', price);

        },
        clearCart(state){
            state.cart = [];
            state.cartCount = 0;
            state.totalPrice = 0;

            this.commit('saveCart');
        },
        checkCart(state, id){



        }
    }
};

export default store;