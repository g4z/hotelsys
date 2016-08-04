
var HotelPanel = React.createClass({
    
    getInitialState: function() {
        return {
            name: 'gareth',
            hotels: []
        };
    },

    componentDidMount: function() {
        this.serverRequest = $.get('/api/v1/hotels', function (result) {
            this.setState({
                hotels: result.hotels
            });
        }.bind(this));
    },

    componentWillUnmount: function() {
        this.serverRequest.abort();
    },

    x: function(e) {
        console.log("hello");
    },

    render: function() {
        return (
            <div onClick={this.x} className="row">
                {this.state.hotels.map(function(hotel) {
                    return (<div className="col-md-4 hotel-panel">
                        <h2>{hotel.name}</h2>
                        <div>{hotel.amenities.map(function(amenity) {
                                return <div>{amenity}</div>;
                            })}</div>
                        <img src={hotel.image}/>
                    </div>);
                })}
            </div>
        );
    }
});

var HotelList = React.createClass({
    
    getInitialState: function() {
        return {
            name: 'gareth',
            hotels: []
        };
    },

    componentDidMount: function() {
        this.serverRequest = $.get('/api/v1/hotels', function (result) {
            this.setState({
                hotels: result.hotels
            });
        }.bind(this));
    },

    componentWillUnmount: function() {
        this.serverRequest.abort();
    },

    x: function(e) {
        console.log("hello");
    },

    render: function() {
        return (
            <div onClick={this.x} className="row">
                {this.state.hotels.map(function(hotel) {
                    return (<div className="col-md-4 hotel-panel">
                        <h2>{hotel.name}</h2>
                        <div>{hotel.amenities.map(function(amenity) {
                                return <div>{amenity}</div>;
                            })}</div>
                        <img src={hotel.image}/>
                    </div>);
                })}
            </div>
        );
    }

});

ReactDOM.render(
    <HotelList/>,
    document.body
);
