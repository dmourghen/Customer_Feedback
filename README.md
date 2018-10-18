# Customer_Feedback

The customer feedback is an app that will allow people to rate the services on three questions.  We would be able to store the rating in a database file. The result can be stored locally or remotely on a database and displayed as chart to interprete it.


import 'package:flutter/material.dart';
import 'package:flutter_rating/flutter_rating.dart';


void main() => runApp(new MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return new MaterialApp(
      title: 'Flutter Demo',
      theme: new ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: new RatingClass(),
    );
  }
}

class RatingClass extends StatefulWidget {
  @override
  _RatingState createState() => new _RatingState();
}

class _RatingState extends State<RatingClass> {
  double rating1 = 3.5, rating2 = 3.5, rating3 = 3.5, rating4 = 3.5;
  int starCount = 5;

  void sendData() async {
    String data = await getWeather("user");
    print(data.toString());
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: new AppBar(
        title: new Text("Star Rating"),
        centerTitle: true,
      ),
      body: new Column(
        children: <Widget>[
          new Padding(
            padding: new EdgeInsets.only(top: 10.0, bottom: 40.0),
            child: new Column(
              children: <Widget>[
                new Text(
                  "Your Question 1 Here",
                  style: new TextStyle(fontSize: 30.0),
                ),
                new StarRating(
                  size: 25.0,
                  rating: rating1,
                  color: Colors.red,
                  borderColor: Colors.blueGrey,
                  starCount: starCount,
                  onRatingChanged: (rating) => setState(
                        () {
                          this.rating1 = rating;
                        },
                      ),
                ),
                new Text(
                  "Your rating is: $rating1",
                  style: new TextStyle(fontSize: 30.0),
                ),
              ],
            ),
          ),
          new Padding(
            padding: new EdgeInsets.only(top: 10.0, bottom: 40.0),
            child: new Column(
              children: <Widget>[
                new Text(
                  "Your Question 1 Here",
                  style: new TextStyle(fontSize: 30.0),
                ),
                new StarRating(
                  size: 25.0,
                  rating: rating2,
                  color: Colors.red,
                  borderColor: Colors.blueGrey,
                  starCount: starCount,
                  onRatingChanged: (rating) => setState(
                        () {
                          this.rating2 = rating;
                        },
                      ),
                ),
                new Text(
                  "Your rating is: $rating2",
                  style: new TextStyle(fontSize: 30.0),
                ),
              ],
            ),
          ),
          new Padding(
            padding: new EdgeInsets.only(top: 10.0, bottom: 40.0),
            child: new Column(
              children: <Widget>[
                new Text(
                  "Your Question 1 Here",
                  style: new TextStyle(fontSize: 30.0),
                ),
                new StarRating(
                  size: 25.0,
                  rating: rating3,
                  color: Colors.red,
                  borderColor: Colors.blueGrey,
                  starCount: starCount,
                  onRatingChanged: (rating) => setState(
                        () {
                          this.rating3 = rating;
                        },
                      ),
                ),
                new Text(
                  "Your rating is: $rating3",
                  style: new TextStyle(fontSize: 30.0),
                ),
              ],
            ),
          ),
          new FlatButton(
              onPressed: () {
                sendData();
              },
              textColor: Colors.white70,
              color: Colors.redAccent,
              child: new Text('Submit')),
        ],
      ),
    );
  }

}
