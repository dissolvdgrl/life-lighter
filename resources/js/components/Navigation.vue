<template>
    <menu-toggle @toggle="$parent.toggleMenu"></menu-toggle>
    <Transition name="slide-fade">
        <div :class="[ $parent.showMenu ? 'flex flex-col items-center absolute left-0 top-0 h-screen w-full bg-white' : 'hidden md:flex' , 'justify-center transition-all duration-150 md:relative md:flex-row md:w-3/4 md:justify-evenly lg:w-2/5 items-center' ]">
            <a href="/" :class="[setActiveLink(''), 'nav-link']">Home</a>
            <a href="/about" :class="[setActiveLink('about'), 'nav-link']">About</a>
            <a href="/services" :class="[setActiveLink('services'), 'nav-link']">Services</a>
            <a href="/blog" :class="[setActiveLink('blog'), 'nav-link']">Blog</a>
            <a href="/contact" :class="[setActiveLink('contact'), 'nav-link']">Contact</a>
            <a href="https://lifelighter.setmore.com/" target="_blank" class="button button-solid bg-pomegranate hover:text-pomegranate  hover:border-pomegranate focus:text-pomegranate focus:border-pomegranate">Book Now</a>
        </div>
    </Transition>
</template>

<script>
import MenuToggle from './MenuToggle.vue';

export default {
    components: {
        MenuToggle,
    },

    setup() {

        const setActiveLink = (routeName) => {
            const currentRoute = window.location.pathname.replace('/', '');
            return currentRoute === routeName ? 'font-bold' : '';
        }

        return {
            setActiveLink
        }
    },

    mounted() {
        this.setActiveLink();
    }
}
</script>
