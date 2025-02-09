<template>
  <div>
    <h1>Book Catalogs</h1>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Category</th>
          <th>Language</th>
          <th>Cover Image</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="book in bookCatalogs" :key="book.id">
          <td>{{ book.name }}</td>
          <td>{{ book.description }}</td>
          <td>{{ book.author }}</td>
          <td>{{ book.publisher }}</td>
          <td>{{ book.category }}</td>
          <td>{{ book.language }}</td>
          <td>
            <img :src="book.cover_image" alt="Cover Image" style="width: 100px; height: auto;" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
defineProps({
  bookCatalogs: Array,
});
console.log(bookCatalogs);
</script>