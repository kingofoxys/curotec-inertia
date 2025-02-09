<template>
  <div>
    <header>
      <!-- Add your header content here -->
    </header>
    <main>
      <slot /> <!-- This is where the page content will be injected -->
    </main>
    <footer>
      <!-- Add your footer content here -->
    </footer>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>