<template>
    <menu-toggle @toggle="$parent.toggleMenu"></menu-toggle>    
    <Transition name="slide-fade">
        <div :class="[ $parent.showMenu ? 'flex flex-col items-center absolute left-0 top-0 h-screen w-full bg-white' : 'hidden md:flex' , 'justify-center transition-all duration-150 md:relative md:flex-row md:w-3/4 md:justify-evenly lg:w-2/5 items-center' ]">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Services</a>
            <a href="#" class="nav-link">Blog</a>
            <a href="#" target="_blank" class="button button-solid bg-pomegranate hover:text-pomegranate  hover:border-pomegranate focus:text-pomegranate focus:border-pomegranate">Book Now</a>
        </div>
    </Transition>
</template>

<script>
import MenuToggle from './MenuToggle.vue';

export default {
    components: {
        MenuToggle,
    }
}
</script>