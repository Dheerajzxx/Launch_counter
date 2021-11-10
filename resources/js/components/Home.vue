<template>
  <div class="flex flex-row">    
      <Sidebar :active="active_menu"/>
      <Main :menu="active"/>      
  </div>
</template>

<script>

import Sidebar from "./Sidebar.vue";
import Main from "./Main.vue";
export default {
  name: "Home",
  components: {
    Sidebar, Main,
  },
   data() {
        return {
            active: "Dashboard",
        }
    },
  methods: {
        active_menu(tab) {
            this.active = tab;
        }
    }
};
</script>
