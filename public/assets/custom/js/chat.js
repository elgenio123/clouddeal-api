window.addEventListener('alpine:init', () => {
    Alpine.data('chatComponent', () => ({
        discussions: [], // Les discussions récupérées depuis le backend
        selectedDiscussion: null ,
        messages: [],
        discussionMessage: [],
        discussionId: 1,

        fetchDiscussions() {
            fetch(`/chat/${2}`)
                .then(response => response.json())
                .then(data => {

                    this.discussions = data.data;
                    // if (this.discussions.length =! 0 ) {
                    //     this.discussionId = this.discussionId + 1;

                    // }
                    this.messages = this.discussions[this.discussionId].messages;
                    console.log(this.discussions);
                    console.log(this.discussionId);
                    console.log('End of fetch disccusions');
                })
                .catch(error => {
                    console.error(error);
                });
        },
        // fetchMessages(discussionId) {
        //     fetch(`/chat/${discussionId}`)
        //         .then(response => response.json())
        //         .then(data => {

        //             this.discussionMessage = data.data;
        //             this.selectedDiscussion= this.discussionMessage.find(discussion => discussion.id === discussionId);
        //             this.messages = this.selectedDiscussion.messages;
        //             console.log(this.messages);
        //             console.log('End of fetch disccusions');
        //         })
        //         .catch(error => {
        //             console.error(error);
        //         });


        // },



    }));
});
