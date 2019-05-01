# assessment-php
This simple project is meant to test your knowledge in OOP, SOLID Principles, Inheritance, Design patterns, composer, namespacing(PSR-4) etc.
Imagine that you run some kind of car repairs or car maintenace shop and you want to build a cost estimation app for it. Your core service is Basic Inspection.
This is the current set of services your shop offers:

For you to do any of the service(s), Basic Inspection is a constant, because you need to do that before you can perform any of the services.
Note however that anytime one or more services are done, there is only one basic inspection.
However, a customer can also just request for only Basic Inspection service.

1. Basic Inspection ====== Cost $ 50 as (core service);

2. Oil Change ====== Cost $ 85;

3. Tire rotation ====== Cost $23.5;

(Important information for design purposes: With time, you can add new services or remove services apart from your core service):

##TASK LIST

Your app should be able to determine the cost for the ff customers dynamically.

1. Faiq is interested in Basic Inspection;

2. Eshaan is interested in carrying out Basic Inspection and Oil Change;

3. Aliu is interested in carrying out Tire Rotation;

4. Faiq also enquired about the cost the total cost of performing Oil Change and Tire rotation together;

## NO UI REQUIRED, YOU CAN USE AN ENTRY FILE TO RUN ON COMMANDLINE TO GET ANSWERS TO DISPLAY THE VARIOUS COST:
