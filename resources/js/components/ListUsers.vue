<template>
  <div class="container">
    <h1>Categorias</h1>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Documento</th>
          <th>Categoria</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.id">
          <td>{{ user.name }}</td>
          <td>{{ user.last_name }}</td>
          <td>{{ user.document_number }}</td>
          <td>{{ user.category }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  props: { users: {} },
  data() {
    return {
      errors: [],
    };
  },
  methods: {},
  mounted() {},
};
</script>