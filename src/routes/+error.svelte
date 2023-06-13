<script>
    import { page } from '$app/stores';
    import { onMount } from 'svelte';

</script>

<div class="min-h-screen flex items-center justify-center bg-[#171717]">
    <h1>{$page.status}: {$page.error.message}</h1>

</div>