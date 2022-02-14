<template>
    <menu-toggle @toggle="$parent.toggleMenu"></menu-toggle>
    <mobile-nav v-if="$parent.showMenu"></mobile-nav>
    <desktop-nav v-if="!$parent.isMobile"></desktop-nav>
</template>

<script>
import MenuToggle from './MenuToggle.vue';
import MobileNav from './MobileNav.vue';
import DesktopNav from './DesktopNav.vue';

export default {
    components: {
        MenuToggle,
        MobileNav,
        DesktopNav
    }
}
</script>