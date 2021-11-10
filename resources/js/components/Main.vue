<template>
    <div class="w-full px-4 py-6">
        <component :is="menu"/>
    </div>
</template>
<script>
import Dashboard from './Dashboard.vue'
import Subscribers from './Subscribers.vue'
import Theme from './Theme.vue'
import Counter from './Counter.vue'
import Social from './Social.vue'
import Profile from './Profile.vue'
import General from './Social.vue'
export default {
     name: "Main",
  components: {
    Dashboard, Subscribers, Theme, Counter, Social, Profile, General
  },
  props: {
        menu: String,
    },
};
</script>