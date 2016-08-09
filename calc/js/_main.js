/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2016-08-09 11:41:29
 * @version $Id$
 */

// Declare the model
calculatorModel = {
    result: 0, // Holds the actual result in memory
    operation: "",
    currentNumber: "0",
    beforeNumber: "0",
    currentDisplay: "", // Shows the input until the result is shown
    num: [],

    reset: function() {
        this.result = 0; 
        this.operation = "";
        this.currentNumber = "0";
        this.beforeNumber = "0";
        this.currentDisplay = "" ;
    },
    
    setOperation: function(operationToSet) {
        this.operation = operationToSet;

        // if(calculatorModel.currentNumber === "0") {
        //     this.currentDisplay += "0";
        // }
        
        if(calculatorModel.beforeNumber === "0") {
            // this.currentDisplay += "0";
            this.currentDisplay += " " + this.operation + " ";
            this.result = calculatorModel.currentNumber;
        }else{
            this.currentDisplay += " " + this.operation + " ";
            this.calculate();
        }
        
        
        this.currentNumber = "";
    },

    calculate: function() {

        switch(this.operation) {
            case "+":
                this.result = this.result + parseFloat(this.currentNumber);
                break;
                
            case "-":

                this.result = this.result - parseFloat(this.currentNumber);

                console.log("this.result=" + this.result);
                console.log("calculatorModel.result=" + calculatorModel.result);
                break;
        }
    }           
    
};

// declare the calculator-module
var calculatorApp = angular.module('calculatorApp', ['calculatorModule']);
var calculatorModule = angular.module('calculatorModule', []);

// Add the calculator-controller to module
calculatorModule.controller('calculatorController', ['$scope', function ($scope) {
    $scope.calculator = calculatorModel;
    $scope.numberButtonClicked = function(clickedNumber) {
        if(calculatorModel.currentNumber === "0") {
            calculatorModel.beforeNumber = calculatorModel.currentNumber;
            calculatorModel.currentNumber = "";
            calculatorModel.currentDisplay = "";
        }
        
        calculatorModel.currentNumber += clickedNumber;
        calculatorModel.currentDisplay += clickedNumber;

        // calculatorModel.num.push();

        console.log(calculatorModel.beforeNumber +","+calculatorModel.currentNumber + "," + calculatorModel.currentDisplay);
    };
    
    $scope.operationButtonClicked = function(clickedOperation) {
        calculatorModel.setOperation(clickedOperation);             
    };
    
    $scope.enterClicked = function() {
        calculatorModel.calculate();
        calculatorModel.currentDisplay = calculatorModel.result;
    };
    
    $scope.resetClicked = function() {
        calculatorModel.reset();
    };
}]);