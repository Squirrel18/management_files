class autho {

    constructor(path_to) {
        this.path_to = path_to;
    }
    
    static get get_autho() {
        return localStorage.getItem("autho");
    }

    sent_autho() {

        let header = new Headers();
        header.append("Authorization", this.get_autho);

        fetch(this.path_to);
    }

}