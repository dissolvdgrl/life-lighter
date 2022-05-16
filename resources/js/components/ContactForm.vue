<template>
    <form v-if="!messages.success" @submit.prevent="validateForm" class="w-2/3 mx-auto">
        <div class="mb-4">
            <label for="name" class="font-bold text-gray-700">Name: </label>
            <input type="text" id="name" v-model="form.name" class="border focus:ring-turquoise focus:border-turquoise block w-full p-2 border-gray-300 rounded-md" :class="{ '!border-pomegranate': this.messages.errors }" @input="clearErrors">
            <p class="text-pomegranate font-bold" v-if="this.messages.errors">This field is required</p>
        </div>
        <div class="mb-4">
            <label for="name" class="font-bold text-gray-700">Email: </label>
            <input type="email" id="email" v-model="form.email" class="border focus:ring-turquoise focus:border-turquoise block w-full p-2 border-gray-300 rounded-md" :class="{ '!border-pomegranate': this.messages.errors }" @input="clearErrors">
            <p class="text-pomegranate font-bold" v-if="this.messages.errors">This field is required</p>
        </div>
        <div class="mb-4">
            <label for="name" class="font-bold text-gray-700">Phone: </label>
            <input type="tel" id="phone" v-model="form.phone" class="border focus:ring-turquoise focus:border-turquoise block w-full p-2 border-gray-300 rounded-md" :class="{ '!border-pomegranate': this.messages.errors }" @input="clearErrors">
            <p class="text-pomegranate font-bold" v-if="this.messages.errors">This field is required</p>
        </div>
        <div class="mb-4 absolute -left-96 opacity-0">
            <label for="name" class="font-bold text-gray-700">Phone: </label>
            <input type="tel" id="phone" v-model="form.email" class="border focus:ring-turquoise focus:border-turquoise block w-full p-2 border-gray-300 rounded-md" autocomplete="off">
            <p class="text-pomegranate font-bold" v-if="this.messages.errors">This field is required</p>
        </div>
        <fieldset>
            <label for="message" class="font-bold text-gray-700">Message subject:</label>
            <div class="relative border border-gray-300 text-gray-800 bg-white mb-4">
                <select class="appearance-none w-full py-1 px-2 bg-white" :class="{ '!border-pomegranate': this.messages.errors }" @input="clearErrors" name="message" id="message" v-model="form.subject">
                    <option value="" selected>Please choose&hellip;</option>
                    <option :value="option" v-for="(option, index) in subjectOptions">{{ option }}</option>
                </select>
                <div class="pointer-events-none absolute right-0 top-0 bottom-0 flex items-center px-2 text-gray-700 border-l">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
            <p class="text-pomegranate font-bold" v-if="this.messages.errors">This field is required</p>
        </fieldset>
        <fieldset v-if="form.subject">
            <div class="mb-4">
                <label for="message" class="font-bold text-gray-700">Your message: </label>
                <input type="text" id="message" v-model="form.message" class="border focus:ring-turquoise focus:border-turquoise block w-full p-2 border-gray-300 rounded-md" :class="{ '!border-pomegranate': this.messages.errors }" @input="clearErrors">
                <p class="text-pomegranate font-bold" v-if="this.messages.errors">This field is required</p>
            </div>
        </fieldset>
        <div class="my-4">
            <button v-if="!messages.loading" type="submit" class="button button-solid bg-turquoise hover:text-turquoise  hover:border-turquoise focus:text-turquoise focus:border-turquoise">Send</button>
            <spinner v-else></spinner>
        </div>
    </form>
    <div class="w-2/3 mx-auto" v-else>
        <p class="text-3xl font-bold text-turquoise">{{ messages.message }}</p>
    </div>
</template>

<script>
import { reactive } from "vue";
import Spinner from "./Spinner";

export default {
    components: {
        Spinner
    },

    setup() {
        const form = reactive({
            name: "",
            email: "",
            phone: "",
            website: "",
            subject: "",
            message: ""
        });

        const subjectOptions = ["Consultation fees", "Availability", "Other"];

        const messages = reactive({
            errors: false,
            success: false,
            message: '',
            loading: false
        });

        return {
            form,
            subjectOptions,
            messages
        }
    },

    methods: {
        validateForm() {
            if(this.form.name === "" || this.form.email === "")
            {
                this.messages.errors = true;
            } else {
                this.submit();
            }
        },

        clearErrors() {
            this.messages.errors = false;
        },

        submit() {
            this.messages.loading = true;
            axios.post('/contact-form', this.form)
                .then(response => {
                    this.messages.loading = false;
                    this.messages.success = true;
                    this.messages.message = response.data.success;
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.messages.loading = false);
        }
    },

}
</script>
