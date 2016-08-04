
var HotelList = React.createClass({
    
    // getInitialState: function() {
    //     return {
    //         hotels: []
    //     };
    // },

    // componentDidMount: function() {
    //     this.serverRequest = $.get('/api/v1/hotels', function (result) {
    //         this.setState({
    //             hotels: result.hotels
    //         });
    //     }.bind(this));
    // },

    // componentWillUnmount: function() {
    //     this.serverRequest.abort();
    // },

    // render: function() {
    //     return (
    //         <div className="row">
    //             {this.state.hotels.map(function(hotel) {
    //                 <p>lala</p>
    //             })}
    //         </div>
    //     );
    // }

    render: function() {
        return <p>lala</p>;
    }

});

ReactDOM.render(<HotelList/>, document.body);