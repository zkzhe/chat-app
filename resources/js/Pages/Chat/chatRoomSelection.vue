<template>
  <div class="grid grid-cols-2">
    <div class="font-blod text-xl">{{ selected.name }} Chat</div>
    <select
      v-model="selected"
      @change="$emit('roomchanged', selected)"
      class="float-right"
    >
      <option v-for="(room, index) in rooms" :key="index" :value="room">
        {{ room.name }}
      </option>
    </select>
  </div>
</template>
<script>
export default {
  props: ["rooms", "currentRoom"],
  data: function () {
    return {
      selected: "",
    };
  },
  created() {
    this.selected = this.currentRoom;
  },
};
</script>
