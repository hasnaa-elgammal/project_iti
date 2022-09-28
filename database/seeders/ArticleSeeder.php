<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Fundamentals of object-oriented programming (OOP)',
            'description' => 'Basic conceptual article of object-oriented programming. Fundamentals, composition, and behaviors.',
            'body' => 'Object-oriented programming is a programming paradigm that describes the construction of a program based on objects. OOP is based on the thought that everything is an object, just like everything around us in the real world is.
A computer, a person, or the air “everything behaves as an object”. Objects have attributes that differentiate them, such as their color, height, or thickness, and they also have behaviors that are basically the actions that this object can perform, such as eating, singing, sending, etc.

The pillars of object programming are basically the set of rules, criteria, and behaviors that govern this paradigm.
Below is a brief simplified description of each of these pillars.

Abstraction: It is the ability to represent important information for the context of the problem. This pillar aims to abstract only what we need to solve the problem and its component parts.
Encapsulation: It is the ability to decide the parts that will be exposed to other entities. This pillar aims to hide or publish attributes or methods depending on the case.
Polymorphism: It is the ability to return different results depending on input values or conditions. This pillar aims to change the behavior of an object by overloading or overriding methods.
Inheritance: It is the ability to build new classes from existing classes, inheriting attributes and methods. This pillar aims at the reuse of existing code.',
            'photo' => 'oop.jpg',
            'user_id'=> 1
        ]);
        Article::create([
            'title' => 'Strategy Design Pattern',
            'description' => 'Strategy is a behavioral design pattern that lets you define a family of algorithms, put each of them into a separate class, and make their objects interchangeable.',
            'body' => 'he Strategy pattern suggests that you take a class that does something specific in a lot of different ways and extract all of these algorithms into separate classes called strategies.

            The original class, called context, must have a field for storing a reference to one of the strategies. The context delegates the work to a linked strategy object instead of executing it on its own.

            The context is not responsible for selecting an appropriate algorithm for the job. Instead, the client passes the desired strategy to the context. In fact, the context doesnt know much about strategies. It works with all strategies through the same generic interface, which only exposes a single method for triggering the algorithm encapsulated within the selected strategy.

            This way the context becomes independent of concrete strategies, so you can add new algorithms or modify existing ones without changing the code of the context or other strategies.',
            'photo' => 'strategy.png',
            'user_id'=> 4
        ]);
        Article::create([
            'title' => 'What are Artificial Intelligence, Machine Learning, and Deep Learning?',
            'description' => 'Here you can find the brief on artificial intelligence, machine learning, and deep learning.',
            'body' => 'WHAT IS ARTIFICIAL INTELLIGENCE?

            Artificial Intelligence is the effort to automate intellectual tasks usually performed by humans.
            Symbolic AI is human-level artificial intelligence that could be achieved by having programmers handcraft a large set of explicit rules for manipulating knowledge.
            Although symbolic artificial intelligence proved suitable to solve well-defined, logical problems such as playing chess, it turned out to be interactable to figure out explicit rules to solve complex, fuzzy problems such as speech recognition, image classification, and language translation. A new approach arose to take symbolic AI is place: machine learning.

            WHAT IS MACHINE LEARNING?

Machine Learning arises from this question: Could a computer go beyond “what we know how to order it to perform” and learn on its own how to perform a specified task?
With machine learning, humans input data as well as the answers expected from the data, and out come the rules. These rules can then be applied to new data to produce original answers.
It is presented with many examples relevant to a task, and it finds a statical structure in these examples that eventually allows the system to come up with rules for automating the task.
Machine learning tends to deal with large, complex datasets, unlike statistics.

WHAT IS DEEP LEARNING?

Deep Learning is a subfield of machine learning: a new take on learning representations from data that puts emphasis on learning successive layers of increasingly meaningful representations.
How many layers contribute to a model of the data is called the depth of the model.
The specification of what a layer does to its input data is stored in the layers weights, which in essence are a bunch of numbers. In technical terms, we would say that the transformation implemented by a layer is parameterized by its weights. Wights are also called the parameters of a layer.
To control the output of a neural network, you need to be able to measure how far this output is from what you expected. This is the job of the loss function of the network, also called the objective function.
            ',
            'photo' => 'ml.jpg',
            'user_id'=> 2
        ]);
        Article::create([
            'title' => 'What is Interfaces?',
            'description' => 'In this tutorial, I will give you a clear explanation of what is interface and when to use this feature in our application.',
            'body' => 'The interface gives us 100% data abstractions. Do you know what is the data abstractions in object oriented programming? Abstraction means the process of data hiding. So, we use an interface in our applications for hiding our data by creating a polymorphic object using the interface. Confused? We can say, in the Laravel interface is a contract for what methods will be used in a specific class to create a polymorphic object.
            ',
            'photo' => 'oop.jpg',
            'user_id'=> 3
        ]);
        Article::create([
            'title' => 'Design Pattern: Builder',
            'description' => 'Creating an object step by step and a method to finally get the object instance',
            'body' => 'Builder is a creational design pattern that lets you construct complex objects step by step. The pattern allows you to produce different types and representations of an object using the same construction code.
            The Builder pattern suggests that you extract the object construction code out of its own class and move it to separate objects called builders.
            The pattern organizes object construction into a set of steps (buildWalls, buildDoor, etc.). To create an object, you execute a series of these steps on a builder object. The important part is that you dont need to call all of the steps. You can call only those steps that are necessary for producing a particular configuration of an object.

Some of the construction steps might require different implementation when you need to build various representations of the product. For example, walls of a cabin may be built of wood, but the castle walls must be built with stone.',
            'photo' => 'builder-en.png',
            'user_id'=> 5
        ]);
        Article::create([
            'title' => '4 Best Laravel Tools and Resources',
            'description' => 'Laravel is just a framework for PHP programming language. But for successful project delivery coding skills and technical knowledge is not enough. So-called “soft” skills are as vital as writing the code, so I decided to touch on that part as well.',
            'body' => '1-Laravel Passport
            Laravel Passport is the simplest possible tool for API authentication. It is a full OAuth2 server implementation that is very easy to use.


            The main features:

            Makes OAuth2 server easy to setup and use with simple command line tool
            Comes with all necessary database migrations, controllers and routes
            Includes pre-built Vue.JS components
            Laravel Passport is OpenSource. Find all the documentation here. The software is an official OAuth2 implementation solution.

            2-Laravel Scout
            Add full-text search to your Eloquent models with Laravel Scout. It is a powerful software to synchronise search indexes with your Eloquent records.


            The main features:

            Comes with an Algolia driver, which is a fast solution
            Allows to write custom drivers instead of Algolia and extend Scout with your own search implementations
            Laravel Scout is OpenSource. You can check it on Laravel official site.

            3-Laravel Spark
            Laravel Spark is a perfect tool for boosting typical SaaS application features development.


            The main features:

            Is an excellent tool for building your product
            Lets you focus on bringing value to the user
            Handles user management (authentication, password reset, team billing, two-factor authentication, API, announcements, invoicing, payments and more)
            Is maximally customizable
            Empowers your applications with Vue.JS
            Ships with Stripe.js v3 to ensure the best security for payment and subscription process
            Is built on Bootstrap 4.0
            Supports the latest Laravel versions
            Has a complete localization
            Comes with a clean and intuitive settings dashboard
            Allows you to build up a business logic and see what the end product will look like
            Laravel Spark is a paid package that comes with a price $99 per site and $299 per for unlimited sites. Learn more on the Spark official site.

            4-Laravel Nova
            Laravel Nova is a Laravel administration panel with great UI and UX which boost up a development.


            The main features:

            Provides a full CRUD interface for your Eloquent models
            Is easy to add to your Laravel application, both the new and the existing
            Configures with simple PHP code
            Easily displays custom metrics for your app (with query helpers included)
            Integrates with Laravel authorization policies (even for relationships, lenses, fields and tools)
            Comes with Nova CLI to take full control over new field types implementation and design
            Provides queued actions
            Enables you to add lenses to control the Eloquent query
            Provides CLI generators to scaffold your own custom tools
            Can be integrated with Laravel Scout to get lightning-fast search results
            Includes built-in filters for soft deleted resources
            Supports the latest versions of Google Chrome, Apple Safari and Microsoft Edge
            Perfectly designed Nova panel comes with price ranging from $99 to $199 per project. Check all the information and documentation',
            'photo' => 'laravel.jpg',
            'user_id'=> 2
        ]);
        Article::create([
            'title' => 'The Factory Pattern',
            'description' => 'Factory Method is a creational design pattern that provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.',
            'body' => 'The Factory Method pattern suggests that you replace direct object construction calls (using the new operator) with calls to a special factory method. Dont worry: the objects are still created via the new operator, but it is being called from within the factory method. Objects returned by a factory method are often referred to as products.',
            'photo' => 'factory-method-en.png',
            'user_id'=> 3
        ]);


        Article::create([
            'title' => 'The importance of good architecture in creating quality software products',
            'description' => 'Good architecture is a crucial element to the success of a software project',
            'body' => 'Architecture is the basis of creating a quality, secure and flexible software product
            Good architecture is the basis of creating a quality, secure and flexible software product.

            Architecture helps to build a product that is easy to maintain and modify. It also enables you to make a secure, reliable, and scalable product.

            As a software architect, you will be responsible for designing and implementing the overall software architecture, including the high-level design of your application. In addition, you will also be responsible for planning, designing, and documenting software architectures.

            The best architecture is the one that meets business requirements
The best architecture is the one that meets business requirements.
Good architecture should be flexible and extensible.
It should be easy to understand, modify, secure, and scale.
Good architecture must be simple and coherent. It should be modular, testable, maintainable, and understandable. In short, it must be easy to change.',
            'photo' => 'arch.png',
            'user_id'=> 4
        ]);
        Article::create([
            'title' => 'Introduction to Laravel',
            'description' => 'Introduction to Laravel — The PHP Framework',
            'body' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell. It is a powerful Model-View-Controller (MVC) PHP framework, designed for developers who need a simple and elegant toolkit to create full-featured web applications.

            Laravel offers a rich set of functionalities which incorporates the basic features of PHP frameworks.

            It saves a lot of time if you are planning to develop a website from scratch.
            When you design a web application based on Laravel it offers you the following advantages.

1-The web application becomes more scalable, owing to the Laravel framework.
2-The time is saved in designing the web application since Laravel reuses the components from other frameworks in developing web applications.
3-It includes namespaces and interfaces, thus helps to organize and manage resources.',
            'photo' => 'laravel.jpg',
            'user_id'=> 1
        ]);

        Article::create([
            'title' => 'Observer Design Pattern',
            'description' => 'Observer is a behavioral design pattern that lets you define a subscription mechanism to notify multiple objects about any events that happen to the object they are observing.',
            'body' => 'The object that has some interesting state is often called subject, but since it is also going to notify other objects about the changes to its state, we will call it publisher. All other objects that want to track changes to the publishers state are called subscribers.

            The Observer pattern suggests that you add a subscription mechanism to the publisher class so individual objects can subscribe to or unsubscribe from a stream of events coming from that publisher. Fear not! Everything isnt as complicated as it sounds. In reality, this mechanism consists of 1) an array field for storing a list of references to subscriber objects and 2) several public methods which allow adding subscribers to and removing them from that list.',
            'photo' => 'observer.png',
            'user_id'=> 5
        ]);

        Article::create([
            'title' => 'SQL vs NoSQL, is one better than the other?',
            'description' => 'Databases have been around since the first days of programming and even before them. They are the essential unit for any application. A good database setup is one of the most important components that have a say in an Applications Performance. ',
            'body' => 'A database is the central unit of an application that contains all the data about different aspects of that application. This data can either be configurations, actual data about the platform, its users and their respective data, and everything in between.
            SQL Databases are databases that use the Structured Query Language for handing, saving, updating, deleting, and manipulating data. These databases use what is known as Relational Database Management Systems (RDBMS). In RDBMS, data is stored in a tabular format.
            NoSQL is short for not-only SQL. It refers to any type of database that stores data in any other way than the RDBMS manner. NoSQL databases are a great fit for many modern applications such as mobile, web, and gaming that require flexible, scalable, high-performance, and highly functional databases to provide great user experiences.',
            'photo' => 'sql.png',
            'user_id'=> 4
        ]);

        Article::create([
            'title' => 'Want Cleaner Code? Use the Rule of Six',
            'description' => 'A simple and powerful framework for ironing out confusing code',
            'body' => 'Everyone wants to write clean code. There are whole books about it!

            But you dont need to read a book to write cleaner code right now. There is one “trick” that every coder can learn to make their code less confusing.

            The key is this:

            1-Every Line Does Only One Thing
            One line, one task.
            But dont go crazy with it.

            That gives us a rule for deciding if a line of code is too complex:

                A line of code containing 6+ pieces of information should be simplified.

                I call it the “rule of six.”
            ',
            'photo' => 'oop.jpg',
            'user_id'=> 1
        ]);
        Article::create([
            'title' => 'Facade Pattern',
            'description' => 'Facade is a structural design pattern that provides a simplified interface to a library, a framework, or any other complex set of classes.',
            'body' => 'A facade is a class that provides a simple interface to a complex subsystem which contains lots of moving parts. A facade might provide limited functionality in comparison to working with the subsystem directly. However, it includes only those features that clients really care about.

            Having a facade is handy when you need to integrate your app with a sophisticated library that has dozens of features, but you just need a tiny bit of its functionality.

            For instance, an app that uploads short funny videos with cats to social media could potentially use a professional video conversion library. However, all that it really needs is a class with the single method encode(filename, format). After creating such a class and connecting it with the video conversion library, you will have your first facade.',
            'photo' => 'facade.png',
            'user_id'=> 3
        ]);
        Article::create([
            'title' => 'WebAssembly: The Future Looks Bright',
            'description' => 'The internet is awash with content defining WebAssembly (Wasm) and its compelling features. I would recommend reading a few of these pieces, which offer thoughtful summaries of the technology, emerging applications, and deployment architectures.',
            'body' => 'Rather than describe the technology and its features, I will focus on why Wasm represents a technology that rights a few of the wrongs of software architecture design patterns. Said another way, Wasm resolves a handful of software development anti-patterns.
            New languages represent exciting junctures in software development. Well, kinda. While they offer the promise of new computing paradigms, this “promise” is rate-limited by the re-implementation of common algorithms and stacks. Before JavaScript became the most widely adopted programming language, the developer community rewrote standard libraries due to a lack of interoperability between parsers.

            This redundant work is an anti-pattern thanks to WebAssembly and the component model mentioned above. Not only does Wasm support a growing list of popular languages, but the language-specific libraries are also increasingly compatible. We are getting closer to wholesale compiling to Wasm of entire applications written for other intended byte code formats. As support grows for these per-language libraries, the past will actually be compatible with the future. SQLite is an example of this, as is Postgres, whose 1.3M lines of code and decades of work will soon be compatible with Wasm.',
            'photo' => 'laravel.jpg',
            'user_id'=> 5
        ]);
    }
}
