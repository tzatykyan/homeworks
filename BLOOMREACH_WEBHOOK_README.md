# Bloomreach Webhook Configuration for Cookie Management

This repository contains Bloomreach webhook configurations that handle cookie assignment based on customer property `customer.extra_data`.

## Files

1. **`bloomreach_webhook_production.json`** - Production-ready configuration
2. **`bloomreach_webhook_detailed.json`** - Detailed version with comments and debug info
3. **`bloomreach_webhook_config.json`** - Basic configuration

## Logic Overview

The webhook implements the following logic for cookie management:

### Scenarios Handled

1. **No existing cookie + extra_data exists**: Assigns `extra_data` as the cookie
2. **Existing cookie + different extra_data**: Adds `extra_data` to the cookie list (doesn't overwrite)
3. **Existing cookie + same extra_data**: Keeps existing cookie, still triggers grow_identify event
4. **No extra_data**: Preserves existing cookie structure

### Key Features

- ✅ **Non-destructive**: Never overwrites existing cookies
- ✅ **List management**: Handles both string and array cookie formats
- ✅ **Duplicate prevention**: Checks if cookie already exists before adding
- ✅ **Event triggering**: Always triggers `grow_identify_event` when `extra_data` is present
- ✅ **Consent tracking**: Adds consent flag when processing `extra_data`

## Usage

### Production Configuration

Use `bloomreach_webhook_production.json` for your live webhook:

```json
{
  "customer_ids": {
    "cookie": [Jinja2 template logic],
    "email_id": "{{ aggregates['688364c8649b9bd6234f8bb9'] }}"
  },
  "properties": {
    "email": "{{ aggregates['688364c8649b9bd6234f8bb9'] }}",
    "grow_identify_event": [true if extra_data exists],
    "consent_added": [true if extra_data exists]
  }
}
```

### Example Scenarios

#### Scenario 1: No existing cookie, extra_data present
**Input:**
- `customer_ids.cookie`: `null`
- `customer.extra_data`: `"abc123"`

**Output:**
```json
{
  "customer_ids": {
    "cookie": "abc123"
  },
  "properties": {
    "grow_identify_event": true,
    "consent_added": true
  }
}
```

#### Scenario 2: Existing cookie, different extra_data
**Input:**
- `customer_ids.cookie`: `"existing_cookie"`
- `customer.extra_data`: `"new_cookie"`

**Output:**
```json
{
  "customer_ids": {
    "cookie": ["existing_cookie", "new_cookie"]
  },
  "properties": {
    "grow_identify_event": true,
    "consent_added": true
  }
}
```

#### Scenario 3: Existing cookie same as extra_data
**Input:**
- `customer_ids.cookie`: `"same_cookie"`
- `customer.extra_data`: `"same_cookie"`

**Output:**
```json
{
  "customer_ids": {
    "cookie": "same_cookie"
  },
  "properties": {
    "grow_identify_event": true,
    "consent_added": true
  }
}
```

## Implementation Notes

### Jinja2 Template Features Used

- **Variable assignment**: `{% set variable = value %}`
- **Conditional logic**: `{% if condition %}`
- **List operations**: `cookie_list + [extra_data]`
- **Type checking**: `existing_cookie is string`
- **Membership testing**: `extra_data not in cookie_list`
- **JSON serialization**: `| json` filter

### Important Considerations

1. **Always triggers events**: Even when `extra_data` equals existing cookie, `grow_identify_event` and `consent_added` are set to `true`
2. **Preserves data types**: Maintains string cookies as strings, arrays as arrays
3. **Null handling**: Gracefully handles cases where `extra_data` is not present
4. **Aggregate compatibility**: Maintains compatibility with existing aggregate field usage

## Testing

Test the webhook with various scenarios:

1. Customer with no existing cookie ID
2. Customer with existing string cookie ID
3. Customer with existing array of cookie IDs
4. Customer with `extra_data` matching existing cookie
5. Customer with `extra_data` different from existing cookie
6. Customer with no `extra_data`

## Deployment

1. Copy the content of `bloomreach_webhook_production.json`
2. Paste into your Bloomreach webhook configuration
3. Update the aggregate ID `'688364c8649b9bd6234f8bb9'` to match your setup
4. Test with sample data before going live