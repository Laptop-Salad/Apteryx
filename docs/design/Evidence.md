# Evidence

This document contains background and decisions made for the
design of Evidence within Apteryx.

## Types of Evidence
There are a few cases we need to consider:
- Different countries or even different states/districts within a country 
(for example, the US) will categorise evidence differently. 
- Different types of investigations will have different forms of evidence
and possibly different categorisation.
- There are multiple ways to categorise evidence, it may be hierarchical.

### Type
How the evidence is stored. Is the evidence fully on the system or held
physically. Digital evidence could also be stored outside the system.

#### Physical vs Digital

### Form
What the evidence is, the medium. The form is seen as a primary
classification in this system as this determines how a specific
piece of evidence is handled, stored, and presented.

Because each form of evidence is wildly different to each other,
Evidence is a parent model and each of the below types is its own model.

Evidence contains basic information that applies to all evidence such
as a description and unique identifier, and the children types contain
unique information.

#### Testimony
The following assumptions were made:
- A testimony must be related to a person within the system.
- A testimony can be stored digitally or physically. If stored digitally
there must be a recorded storage type such as Audio, Video or a Document. This
can be linked in the system.

#### Real Evidence
#### Hearsay
#### Bad Character
#### Confession
#### Documentary
- Documentary
- Business Documents
- Schedules

### Classifications
How the evidence supports a fact/claim.

- Direct
- Circumstantial
- Primary
- Secondary
- Forensic
- Expert

## Link to Case Files [todo]
The assumption was made that a single piece of evidence could be linked to
multiple cases.

## Admissability [todo]

### Criteria [todo]
Investigators will likely wish to check that evidence is admissible in court.

### Exhibits [todo]
According to [Evidence in Criminal Investigations](https://assets.publishing.service.gov.uk/media/5f68a022d3bf7f723618780e/evidence-in-criminal-investigations-v5.0.pdf)
exhibits are pieces of evidence that have been formally entered into the court
that are used to support arguments and claims.

The assumption was made that an exhibit can be used in multiple court cases
and can have a different identifier every time (Exhibit A, Exhibit B).

## Chain of Evidence [todo]
The following details must be maintained regarding a piece of evidence:
- Where it was found
- Where it was seized/produced
- Time and date it was seized/produced
- Who it was seized/produced by
- Any activity after it was seized/produced
