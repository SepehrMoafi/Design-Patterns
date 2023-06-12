## Adapter Design Pattern

The Adapter design pattern is a structural design pattern that facilitates collaboration between classes with incompatible interfaces by introducing a wrapper or adapter class. It acts as a bridge between two incompatible interfaces, converting the interface of one class into another interface that clients expect. The adapter pattern promotes code reusability and enables interoperability between classes.

When to Use the Adapter Pattern

Consider using the Adapter pattern in the following scenarios:

- When you want to utilize an existing class, but its interface is incompatible with the rest of your codebase or another class.
- When you need to integrate third-party libraries or components that have incompatible interfaces with your application.
- When you aim to create a reusable class that can collaborate with multiple unrelated or incompatible classes.

## Example

In this example, we have a LegacyPrinter class that has its own print method, which is incompatible with the PrinterInterface interface. To bridge the gap, we introduce the PrinterAdapter class, which acts as an adapter. It implements the PrinterInterface and internally utilizes the LegacyPrinter to perform the printing. The client code interacts with the PrinterAdapter without needing to know the underlying implementation details.

By utilizing the Adapter pattern, you can seamlessly integrate the LegacyPrinter with the rest of your codebase or other classes that expect the PrinterInterface.
