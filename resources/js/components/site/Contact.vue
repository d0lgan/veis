<template>
    <div class="container">
        <div class="row">
            <div v-if="error" class="alert alert-danger alert-dismissible fade show fixed-top" role="alert">
                Не все поля заполнены
                <button @click="closeError()" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div v-if="confirm" class="alert alert-success alert-dismissible fade show fixed-top" role="alert">
                Запрос отправлен
            </div>
            <div class="col-12 h1">
                Обратная связь
            </div>
            <div class="form-group col-md-12">
                <label for="type">Тип</label>
                <select name="type" id="type" v-model="form.type" class="form-control">
                    <option value="call">Звонок</option>
                    <option value="message">Сообщение</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="name">Имя</label>
                <input type="text" id="name" v-model="form.name" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label for="phone">Телефон</label>
                <input type="number" id="phone" v-model="form.phone" class="form-control">
            </div>
            <div class="form-group col-md-12" v-if="form.type === 'message'">
                <label for="email">Email</label>
                <input type="text" id="email" v-model="form.email" class="form-control">
            </div>
            <div class="form-group col-md-12" v-if="form.type === 'message'">
                <label for="theme">Тема</label>
                <input type="text" id="theme" v-model="form.theme" class="form-control">
            </div>
            <div class="form-group col-md-12" v-if="form.type === 'message'">
                <label for="message">Сообщение</label>
                <textarea cols="30" rows="5" type="text" id="message" v-model="form.message" class="form-control" style="resize:none"></textarea>
            </div>
            <div class="col-md-12">
                <div @click="confirmRequest()" class="btn btn-primary">
                    Отправить
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Contact",
        data(){
            return{
                form: {name: '', type: 'call', phone: '', email: '', theme: '', message: ''},
                error: false,
                confirm: false
            }
        },
        methods:{
            confirmRequest: function () {
                if(this.form.type === 'call'){
                    if(this.form.name === '' || this.form.phone === ''){
                        this.error = true;
                    }
                }else if(this.form.type === 'message'){
                    if(this.form.theme === '' || this.form.message === ''){
                        this.error = true;
                    }
                }else{
                    this.error = true;
                }

                if(this.error === false){
                    axios.post('/api/contact/createRequest', {form: this.form}).then((res) => {
                        if(res.data === true){
                            // let self = this;
                            this.confirm = true;
                            setTimeout(function(){
                                // self.confirm = false;
                                window.location.href = '/'
                            }, 1000);

                        }

                    });
                }
            },
            closeError(){

                this.error = false;

            }
        }
    }
</script>

<style scoped>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>