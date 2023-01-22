import { createStore } from 'vuex'

export default createStore({
  state: {
    user:""
  },
  getters: {
  },
  mutations: {
    login (state,user) {
      state.user = user;
      localStorage.setItem('user', user);
      alert('Logged in');
    },
    logout(state){
      state.email ="";
      localStorage.removeItem('user');
      alert('Logged out');
    },
    initialiseStore(state) {
      if(localStorage.getItem('user')){
        state.user = localStorage.getItem('user');
       }
    }
  },
  actions: {
  },
  modules: {
  }
})