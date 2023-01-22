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
    },
    logout(state){
      state.user ="";
      localStorage.removeItem('user');
    },
  },
  actions: {
  },
  modules: {
  }
})