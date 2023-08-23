# Adapter Design Pattern Examples in PHP

This repository provides clear and illustrative examples of the Adapter Design Pattern implemented in PHP. The Adapter Pattern is used to bridge the gap between two incompatible interfaces, making them work seamlessly together.

## Table of Contents

- [Simple Example: Rectangle to Triangle Adapter](#simple-example-rectangle-to-triangle-adapter)
- [Complex Example: Kilometer to Mile Distance Adapter](#complex-example-kilometer-to-mile-distance-adapter)
- [Why Use the Adapter Design Pattern](#why-use-the-adapter-design-pattern)

---

## Simple Example: Rectangle to Triangle Adapter

In this example, the Adapter Pattern is used to adapt an existing `Rectangle` class to work with a new `Triangle` class. The classes have different interfaces for area calculation. The `RectangleAdapter` is introduced to make the `Rectangle` class compatible with the `Triangle` interface.

[Go to Simple Example](/Simple%20Example/Use.php)

---

## Complex Example: Kilometer to Mile Distance Adapter

In this example, the Adapter Pattern is employed to convert distances from kilometers to miles. A legacy `KilometerDistanceCalculator` class calculates distances in kilometers, while a new interface `DistanceCalculator` expects distances in miles. The `KilometerToMileAdapter` is created to convert distances and adapt the legacy code to the new interface.

[Go to Complex Example](/complex-example.php)

---

## Why Use the Adapter Design Pattern

The Adapter Design Pattern might seem simple, but it serves important purposes in software design:

- **Legacy Code Integration:** Seamlessly integrate legacy code with different interfaces into a new codebase.
- **Third-Party Libraries:** Integrate third-party libraries with different interfaces without modifying their source code.
- **Interface Consistency:** Maintain a consistent interface throughout the system, enhancing understandability and maintainability.
- **Code Reuse:** Adapt existing classes with different interfaces to work together, promoting code reuse.
- **Open-Closed Principle:** Follow the Open-Closed Principle by introducing new adapters without modifying existing code.
- **Separation of Concerns:** Separate integration logic from the main application logic, improving code organization.
- **Testing and Maintenance:** Test application components in isolation by mocking adapter behavior.

The Adapter Pattern solves real-world integration challenges and enhances code maintainability.

---

Feel free to explore the examples in this repository to gain a deeper understanding of how the Adapter Design Pattern works in PHP.

If you have any questions or suggestions, please feel free to open an issue or contact me.

Happy coding!
