class autho {

    constructor(path_to) {
        this.path_to = path_to;
    }
    
    static get get_autho() {
        return localStorage.getItem("autho");
    }

    send_autho() {

        let header = new Headers();
        header.append("Authorization", localStorage.getItem("autho"));
        header.append("Accept", "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8");
        header.append("Content-Type", "document");

        let init = { method: 'GET',
                    mode: 'same-origin',
                    cache: 'default',
                    headers: header,
                    credentials: 'same-origin'
        };

        let request = new Request(this.path_to, init);

        fetch(request);
    }

}