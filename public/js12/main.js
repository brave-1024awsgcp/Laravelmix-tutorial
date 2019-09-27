new Vue({
	el:"#app",
  data:{
  	listlabel:["category","fulstack","frontend","sqls","gengo","serveres","os"],
    sublistlabel:["category","fulstack","frontend","sqls","gengo","serveres","os"],
    active:""
  },
  methods:{
  	dropdown(list){
    console.log(this.active);
    	this.active = this.active===list ? "":list;
    }
  }
});