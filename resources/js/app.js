require('./bootstrap');

import { createApp } from 'vue';
import HeaderClipPath from './components/HeaderClipPath.vue';

createApp({
    components: {
        HeaderClipPath
    }
}).mount("#app")