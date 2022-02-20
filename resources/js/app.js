require('./bootstrap');

import { createApp, ref } from 'vue';
import HeaderClipPath from './components/HeaderClipPath.vue';
import Navigation from './components/Navigation.vue';
import MenuToggle from './components/MenuToggle.vue';
import Email from './components/Email.vue';

createApp({
    components: {
        HeaderClipPath,
        MenuToggle,
        Navigation,
        Email,
},

    setup() {
        const showMenu = ref(false);

        const toggleMenu = () => {            
            showMenu.value = !showMenu.value;
        }

        return {
            showMenu,
            toggleMenu,
        }
    }

}).mount("#app")