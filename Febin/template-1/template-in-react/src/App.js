import "./App.css";
import Navbar from "./Components/Navbar";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Home from "./Components/Home";

function App() {
  return (
    <div>
      <Router>
        <Switch>
          <Navbar />
        </Switch>
      </Router>
      <Router>
        <Switch>
          <Route path="/" exact />
          <Route path="/home" component={Home} />
        </Switch>
      </Router>
    </div>
  );
}

export default App;

//Oro pagesil exact aayt povan aan switch
