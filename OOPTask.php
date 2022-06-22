<?php
/**
 * TASK
 *
 * A business has two types of users: staff and clients.
 * Staff members can perform actions to help run the business while clients interact with the business by buying products and services.
 * The two types of users aren't completely different however, they both have logins and profiles.
 * Describe in words (no source code) what classes you'd create to model users for this business and any relationships between classes (no need for properties or methods).
 */

/*
 * ANSWER
 *
 * First, I need to create a parent class for employees and clients and define the interface(s) that will need to be implemented (authorization interface, etc.).
 * The next step is to create an interface for the profile and, based on it, define specific implementations of profiles for both employees and clients.
 * Based on the strategy pattern, you can link profiles and users.
 * Depending on the actions that employees or clients can perform, we create abstractions for roles and access rights. We also extend classes and add abstractions as needed.
 */