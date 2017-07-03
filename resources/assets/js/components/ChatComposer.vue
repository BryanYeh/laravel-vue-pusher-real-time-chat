<template lang="html">
  <div class="chat-composer">
      <input id="message" type="text" placeholder="type message" v-model="inputMessage" @keyup.enter="sendMessage"></input>
      <button class="btn btn-primary" @click="sendMessage">Send</button>
  </div>
</template>

<script>
export default {
    data(){
        return{
            inputMessage: ''
        }
    },
    methods:{
        sendMessage(){
            this.$emit('messagesent',{
                message: this.inputMessage,
                user:{
                    name: username
                } 
            })
            this.inputMessage = '';
        }
    }
}
</script>

<style>
.chat-composer {
    display: flex;
}
.chat-composer input {
    flex: 1 auto;
    padding: .5rem 1rem;
}
.chat-composer button {
    border-radius: 0;
}
</style>
