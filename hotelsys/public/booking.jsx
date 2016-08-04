
var DateSelector = React.createClass({
    getInitialState: function() {
        return {
            id: '',
            day: '',
            month: '',
            year: '',
        };
    },
    componentDidMount: function() {
        var d = new Date();
        this.setState({
            id: this.props.myid,
            day: d.getDay(),
            month: d.getMonth() + 1,
            year: d.getFullYear(),
        });
        $("div#" + this.props.myid + " select:nth-child(2)").val(d.getDay());
        $("div#" + this.props.myid + " select:nth-child(3)").val(d.getMonth() + 1);
        $("div#" + this.props.myid + " select:nth-child(4)").val(d.getFullYear());
    },
    handleSelect: function(e) {
        switch ($(e.currentTarget).attr('type')) {
            case 'day':
                this.setState({day: $(e.currentTarget).val()});
                break;
            case 'month':
                this.setState({month: $(e.currentTarget).val()});
                break;
            case 'year':
                this.setState({year: $(e.currentTarget).val()});
                break;
        }
    },
    render: function() {
        return (
            <div id={this.props.myid}>
                <input type="hidden" name={this.state.id} value=""/>
                <select
                    type="day"
                    onChange={this.handleSelect}
                >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                </select>
                <select
                    type="month"
                    onChange={this.handleSelect}
                >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>
                <select
                    type="year"
                    onChange={this.handleSelect}
                >
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                </select>
                <p>{this.state.day}/{this.state.month}/{this.state.year}</p>
            </div>
        );
    }
});

var BookingCalendar = React.createClass({
    
    handleSelect(range){
        // console.log(range);
        // An object with two keys,
        // 'startDate' and 'endDate' which are Momentjs objects.
    },

    render: function() {
        return (
            <div>
                <p>From: </p><DateSelector myid="from"/>
                <p>To: </p><DateSelector myid="to"/>
            </div>
        );
    }
});

var BookingForm = React.createClass({
    
    getInitialState: function() {
        return {
            hotels: []
        };
    },

    componentDidMount: function() {
        // this.serverRequest = $.get('/api/v1/hotels', function (result) {
        //     this.setState({
        //         hotels: result.hotels
        //     });
        // }.bind(this));
    },

    componentWillUnmount: function() {
        // this.serverRequest.abort();
    },

    render: function() {
        return (
            <BookingCalendar/>
        );
    }

});

ReactDOM.render(<BookingForm/>, document.body);
