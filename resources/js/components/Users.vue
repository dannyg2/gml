<template>
  <div class="container">
    <h1>users</h1>
    <div class="row">
      <list-users :users="users" class="col-md-6"></list-users>
      <create-users @reload="reload" class="col-md-6"></create-users>
    </div>
  </div>
</template>
<script>
import ListUsers from "./ListUsers.vue";
import CreateUsers from "./CreateUser.vue";
export default {
  components: {
    ListUsers,
    CreateUsers,
  },
  data() {
    return {
      users: [],
    };
  },
  methods: {
    reload() {
      this.axios
        .get("api/users")
        .then((response) => {
          this.users = response.data.data;
        })
        .catch((err) => (this.errors = err.response.data.errors));
    },
  },
  created() {
    this.reload();
  },
};
</script>