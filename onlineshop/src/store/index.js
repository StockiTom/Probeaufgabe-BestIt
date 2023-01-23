import { createStore } from 'vuex'

export default createStore({
  state: {
    user:""
  },
  getters: {
  },
  mutations: {
    login (state,user) {
      //Wird der User in den state geladen und ein LocalStorage mit User erstellt
      state.user = user;
      localStorage.setItem('user', user);
    },
    logout(state){
      //Wird der state User auf "" gesetzt und der localStorage gelöscht
      state.user ="";
      localStorage.removeItem('user');
    },
  },
  actions: {
  },
  modules: {
  }
})