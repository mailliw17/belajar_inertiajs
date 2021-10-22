<template>
  <main>
    <header>
      <Link href="/home">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/user">User</Link>
      <Link href="/user/create">Registrasi !</Link>
    </header>
    <article>
        <!-- slot ini utk isi si pemakai template -->
      <slot />
    </article>
    <footer>
        <p>&copy; William 2021</p>
    </footer>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'

export default {
  components: {
    Link,
  }
}
</script>