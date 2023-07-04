window.addEventListener('alpine:init', () => {
    Alpine.data('chatComponent', () => ({
        discussions: [], // Les discussions récupérées depuis le backend
        selectedDiscussion: null,
        messages: [],
        discussionMessage: [],
        currentDiscussion: null,

        fetchDiscussions() {
            fetch(`/chat/${2}`)
                .then(response => response.json())
                .then(data => {

                    this.discussions = data.data;
                    if (this.discussions.length > 0) {
                    //  this.messages = this.discussions[this.currentDiscussion].messages;
                        this.currentDiscussion = this.discussions[this.currentDiscussion].id;
                        this.fetchMessages();
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        },
        fetchMessages() {
            fetch(`/chat/messages/`+ this.currentDiscussion)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    // this.messages = data;

                    // this.selectedDiscussion= this.discussionMessage.find(discussion => discussion.id === currentDiscussion);
                    // this.messages = this.selectedDiscussion.messages;
                    console.log(this.messages);
                    console.log('End of fetch disccusions');
                })
                .catch(error => {
                    console.error(error);
                    console.log(error);
                });


        },



    }));
});
