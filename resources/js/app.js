require('./bootstrap');

import { createApp, ref } from 'vue';
import HeaderClipPath from './components/HeaderClipPath.vue';
import Navigation from './components/Navigation.vue';
import MenuToggle from './components/MenuToggle.vue';

createApp({
    components: {
        HeaderClipPath,
        MenuToggle,
        Navigation,
},

    setup() {
        const showMenu = ref(false);
        let isMobile = true;

        const toggleMenu = () => {            
            showMenu.value = !showMenu.value;
        }

        const resizedListener = window.addEventListener('resize', () => {
            return isMobile = window.innerWidth <= 786;
        });

        return {
            showMenu,
            toggleMenu,
            isMobile,
            resizedListener,
        }
    }

}).mount("#app")