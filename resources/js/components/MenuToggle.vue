<template>
    <div id="navToggle" class="cursor-pointer flex flex-col justify-center items-center z-20 h-24 w-24 transition-all duration-150 hover:opacity-50" @click="$emit('toggle')">
        <div :class="[ $root.showMenu ? ['rotate-45', 'mb-0', 'absolute'] : '' ]"></div>
        <div :class="[ $root.showMenu ? ['-rotate-45', 'absolute'] : '' ]"></div>
    </div>
</template>

<script>
export default {
}
</script>