require('./bootstrap');

import { createApp, ref } from 'vue';
import HeaderClipPath from './components/HeaderClipPath.vue';
import MenuToggle from './components/MenuToggle.vue';

createApp({
    components: {
        HeaderClipPath,
        MenuToggle
    },

    setup() {
        const showMenu = ref(false);

        const toggleMenu = () => {            
            showMenu.value = !showMenu.value;
        }

        return {
            showMenu,
            toggleMenu
        }
    }

}).mount("#app")